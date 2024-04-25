jQuery(document).ready(function () {
    var categoryId = $("select[name='categories_select']").val();
    getCategories(categoryId);

    jQuery("select[name='categories_select']").change(function () {
        let currentCategoryVal = $(this).val();
        let currentSubCategoryId = $(this)
            .closest("section.PageJobs-container")
            .find(
                "div.SubCategory-breadCrumb nav.Breadcrumbs ul li:first-child span"
            )
            .attr("category-id");
        getCategories(currentCategoryVal);
        getListPosts(currentSubCategoryId);
    });
});

function getCategories(categoryId) {
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        url: "/categories/get-sub-categories/" + categoryId,
        success: function (data) {
            jQuery(".Breadcrumbs-Categories-list").empty();
            jQuery(".Breadcrumbs-Categories-list").html(data);

            let subCategoryId = $("section.PageJobs-container")
                .find(
                    "div.SubCategory-breadCrumb nav.Breadcrumbs ul li:first-child span"
                )
                .attr("category-id");

            getListPosts(subCategoryId);

            jQuery("li.Breadcrumbs-item.tag").on("click", function () {
                let categoryBreadcrumbs = jQuery(this)
                    .find("span")
                    .attr("category-id");
                getListPosts(categoryBreadcrumbs);
            });
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy thư mục:", error);
        },
    });
}

function getListPosts(categoryId) {
    console.log(categoryId);
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        url: "/posts/list/" + categoryId,
        success: function (data) {
            jQuery("#posts-list").empty();
            jQuery("#posts-list").html(data);
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy bài đăng:", error);
        },
    });
}
