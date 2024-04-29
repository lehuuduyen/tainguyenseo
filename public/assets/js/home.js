jQuery(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);
    var searchKeyword = urlParams.get("search_keyword")
        ? urlParams.get("search_keyword")
        : null;
    var categoryParam = urlParams.get("category")
        ? urlParams.get("category")
        : null;
    var page = urlParams.get("page") ? urlParams.get("page") : 1;

    var params = {};

    var categoryId = categoryParam ? categoryParam : 1;

    params["category_id"] = categoryId;
    params["search_keyword"] = searchKeyword;
    params["page"] = page;

    jQuery("#btn-search-price").click(function () {
        params["mix_price"] = jQuery("#fixed-min").val();
        params["max_price"] = jQuery("#fixed-max").val();
        console.log(jQuery("#fixed-min").val());
        getCategories(params);
        getListPosts(param);
    });

    onChangeSelect();
    getCategories(params);
});

function onChangeSelect() {
    jQuery("select[name='categories_select']").change(function () {
        let currentCategoryVal = jQuery(this).val();
        var paramsChange = {};
        paramsChange["category_id"] = currentCategoryVal;
        getCategories(paramsChange);
    });
}
function getCategories(param) {
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        url: "/categories/get-sub-categories/" + param["category_id"],
        success: function (data) {
            jQuery(".PageJobs-breadCrumb").empty();
            jQuery(".PageJobs-breadCrumb").html(data);

            let subCategoryId = jQuery("section.PageJobs-container")
                .find("input[name='selected_category']")
                .val();
            param["category_id"] = subCategoryId;
            getListPosts(param);

            jQuery("li.Breadcrumbs-item.tag").on("click", function () {
                let categoryBreadcrumbs = jQuery(this)
                    .find("span")
                    .attr("category-id");
                param["category_id"] = categoryBreadcrumbs;
                param["page"] = 1;
                getCategories(param);
            });

            onChangeSelect();
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy thư mục:", error);
        },
    });
}

function getListPosts(params) {
    Object.keys(params).forEach(
        (key) =>
            params[key] === undefined ||
            (params[key] === null && delete params[key])
    );
    var queryString = jQuery.param(params);
    jQuery.ajax({
        type: "GET",
        dataType: "html",
        url: "/posts-list/" + (queryString ? "?" + queryString : ""),
        success: function (data) {
            jQuery(".Post-Right").empty();
            jQuery(".Post-Right").html(data);
        },
        error: function (xhr, status, error) {
            console.error("Lỗi khi lấy bài đăng:", error);
        },
    });
}
