jQuery(document).ready(function () {
    // Format currency
    jQuery("input.currency").on("keyup", function () {
        let parts = $(this).val().split(".");
        let v = parts[0].replace(/\D/g, ""),
            dec = parts[1];
        let calc_num = Number(dec !== undefined ? v + "." + dec : v);
        let n = new Intl.NumberFormat("en-EN").format(v);
        n = dec !== undefined ? n + "." + dec : n;
        jQuery(this).val(n);
    });

    // Force to input integer on field
    jQuery(".integer_value").keyup(function (e) {
        if (/\D/g.test(this.value)) {
            this.value = this.value.replace(/\D/g, "");
        }
    });
});
