var editorConfig = {
    modules: {
        toolbar: [
            [
                {
                    size: ["small", false, "large", "huge"],
                },
            ],
            ["bold", "italic", "underline", "link", "strike", "color"],
            ["image", "code-block"],
            ["clean"],
        ],
        attachments: {
            render: (node, { dataUrl, file }) => {
                if (file.size > 110 * 1000000) {
                    alert(
                        "Your upload files size is " +
                            Math.round(file.size / 1000000, 2) +
                            "MB. Our system allow a file is less than " +
                            110 +
                            "MB."
                    );
                    return node;
                }
                node.src = dataUrl;
                node.setAttribute(
                    "data-file",
                    JSON.stringify([
                        {
                            name: file.name,
                            size: file.size,
                            type: file.type,
                            base64: dataUrl,
                        },
                    ])
                );
                node.setAttribute("class", "quill-attachment-file");
                node.textContent = file.name;
                node.style = "max-width:100%";
                node.setAttribute("alt", file.name);
                return node;
            },
            onFileUploaded: (node, { url }) => {
                window.onbeforeunload = () => {};
            },
        },
    },
    theme: "snow",
};

const generateId = () => {
    const name = "QUILL_ATTACHMENT";
    const id = new Date().getTime();
    return `${name}_${id}`;
};

class Attachments {
    fileList = [];

    constructor(quill, options) {
        this.quill = quill;
        this.options = options;
        this.range = null;

        if (typeof this.options.render !== "function") {
            console.warn(
                "[Missing config] render function that returns a doom node is required"
            );
        }
        this.quill
            .getModule("toolbar")
            .addHandler("image", this.selectLocalImage.bind(this));
    }

    selectLocalImage() {
        this.range = this.quill.getSelection();
        this.fileHolder = document.createElement("input");
        this.fileHolder.setAttribute("type", "file");
        this.fileHolder.setAttribute("accept", "*/*");
        this.fileHolder.onchange = this.fileChanged.bind(this);
        this.fileHolder.click();
    }
    fileChanged() {
        const file = this.fileHolder.files[0];
        const attachmentId = generateId();
        const fileReader = new FileReader();

        fileReader.addEventListener(
            "load",
            () => {
                let base64content = fileReader.result;
                this.insertAttachment({
                    dataUrl: base64content,
                    file,
                    id: attachmentId,
                });
            },
            false
        );

        if (file) {
            fileReader.readAsDataURL(file);
        }
    }

    insertAttachment({ dataUrl, file, id }) {
        this.fileList.push({
            id,
            file,
            dataUrl,
        });
        this.quill.insertEmbed(this.range.index, "attachment", {
            id,
            properties: {
                dataUrl,
                file,
            },
            render: this.options.render,
        });
    }
    updateAttachment(id, url) {
        const element = document.getElementById(id);
        if (element) {
            element.setAttribute("href", url);
            element.removeAttribute("id");
            if (typeof this.options.onFileUploaded === "function") {
                this.options.onFileUploaded(element, {
                    url,
                });
            }
        }
    }
}

const Image = Quill.import("formats/image");

const ATTRIBUTES = [
    "alt",
    "height",
    "width",
    "class",
    "data-file",
    "style",
    "data-file-link",
    "data-file-link-gpg",
];
class Attachment extends Image {
    static create(value) {
        const node = super.create(value);
        if (typeof value === "string") {
            node.setAttribute("src", this.sanitize(value));
        }
        const { properties, id, render } = value;
        if (typeof render === "function") {
            // safe to use the function
            return render(node, properties);
        }
        return node;
    }

    static formats(domNode) {
        return ATTRIBUTES.reduce((formats, attribute) => {
            if (domNode.hasAttribute(attribute)) {
                formats[attribute] = domNode.getAttribute(attribute);
            }
            return formats;
        }, {});
    }

    format(name, value) {
        if (ATTRIBUTES.indexOf(name) > -1) {
            if (value) {
                this.domNode.setAttribute(name, value);
            } else {
                this.domNode.removeAttribute(name);
            }
        } else {
            super.format(name, value);
        }
    }
}
Attachment.blotName = "attachment";
Attachment.tagName = "img";

Quill.register("modules/attachments", Attachments);
Quill.register({
    "formats/attachment": Attachment,
});

new Quill("#editor", editorConfig);
