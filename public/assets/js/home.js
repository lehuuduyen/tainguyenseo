jQuery(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var searchKeyword = urlParams.get("search_keyword");
    var categoryParam = urlParams.get("category");

    var categoryId = $("select[name='categories_select']").val();

    getCategories(categoryId, searchKeyword);

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

function getCategories(categoryId, searchKeyword) {
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

            getListPosts(subCategoryId, searchKeyword);

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

function getListPosts(categoryId, searchKeyword = null) {
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        // "/posts/category_id/{category_id}/search_keyword/{search_keyword}"
        url: "/posts/category_id/" + categoryId + "/search_keyword/" + searchKeyword,
        success: function (data) {
            jQuery("#posts-list").empty();
            jQuery("#posts-list").html(data);
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy bài đăng:", error);
        },
    });
}
