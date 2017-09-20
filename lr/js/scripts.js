$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("form>div.bhoechie-tab-content").removeClass("active");
        $("form>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

$(document).ready(function() {
    $("Button.ButtonNext").click(function(e) {
        e.preventDefault();
        var $active = $("body").find("a.list-group-item.active").next("a.list-group-item")
        $("body").find("a.list-group-item.active").removeClass("active");
        $active.addClass("active");

        var $active = $("body").find("form>div.bhoechie-tab-content.active").
        next("form>div.bhoechie-tab-content")
        $("body").find("form>div.bhoechie-tab-content.active").removeClass("active");
        $active.addClass("active");
    });
});
