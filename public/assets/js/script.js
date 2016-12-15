$(document).ready(function () {
    $(".alert").addClass("in").fadeOut(4500);
    /* swap open/close side menu icons */
    $('[data-toggle=collapse]').click(function () {
        // toggle icon
        $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });
    /* Activation of Bootstrap Tooltip for administration tool */
        $('[data-toggle="tooltip"]').tooltip();
    });
function printContent(el) {
                        var restorepage = $('body').html();
                        var printcontent = $('#' + el).clone();
                        $('body').empty().html(printcontent);
                        window.print();
                        $('body').html(restorepage);
                    }
