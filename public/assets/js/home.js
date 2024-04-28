jQuery(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var searchKeyword = urlParams.get("search_keyword") ? urlParams.get("search_keyword") : null;
    var categoryParam = urlParams.get("category") ? urlParams.get("category") : null;
    var page = urlParams.get("page") ? urlParams.get("page") : 1;

    var categoryId = categoryParam ? categoryParam : 1;
    onChangeSelect();
    getCategories(categoryId, searchKeyword, page);
});

function onChangeSelect() {
    jQuery("select[name='categories_select']").change(function () {
        let currentCategoryVal = $(this).val();
        getCategories(currentCategoryVal);
    });
}
function getCategories(categoryId, searchKeyword, page) {
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        url: "/categories/get-sub-categories/" + categoryId,
        success: function (data) {
            jQuery(".PageJobs-breadCrumb").empty();
            jQuery(".PageJobs-breadCrumb").html(data);

            let subCategoryId = $("section.PageJobs-container")
                .find("input[name='selected_category']")
                .val();
            getListPosts(subCategoryId, searchKeyword, page);

            jQuery("li.Breadcrumbs-item.tag").on("click", function () {
                let categoryBreadcrumbs = jQuery(this)
                    .find("span")
                    .attr("category-id");
                getCategories(categoryBreadcrumbs);
            });

            onChangeSelect();
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy thư mục:", error);
        },
    });
}

function getListPosts(categoryId, searchKeyword = "null", page = 1) {
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        url:
            "/posts/category_id/" +
            categoryId +
            "/search_keyword/" +
            searchKeyword +
            "/page/" +
            page,
        success: function (data) {
            jQuery(".Post-Right").empty();
            jQuery(".Post-Right").html(data);
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy bài đăng:", error);
        },
    });
}
