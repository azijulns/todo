
    // generate note dots in resize
    function addDots() {
        let bodyHight = $(".to-do-list-body").outerHeight(true);
        let dotHight = $(".dot").outerHeight();
        let length = bodyHight / dotHight;

        let box = "";
        for (let i = 0; i < length; i++) {
            box += `<div class="dot"></div>`;
        }

        $(".dots").html(box);
    }

    setInterval(addDots, 500);

    jQuery(document).ready(function () {
     jQuery(".status-icone").on("click", function () {
        jQuery("#status").val(jQuery(this).attr("data-id"));
        jQuery("#status-form").trigger("submit");
});
     jQuery(".delete-icone").on("click", function () {
         jQuery("#delete").val(jQuery(this).attr("data-id"));
         jQuery("#delete-form").trigger("submit");
     });
    });