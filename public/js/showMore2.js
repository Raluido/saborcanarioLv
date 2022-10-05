$(".showMore2 a").on("click", function () {
    var $this = $(this);
    var $content = $this.parent().prev("div.content");
    var linkText = $this.text().toUpperCase();
    if (linkText === "Saber más") {
        linkText = "Saber menos";
        $content.switchClass("hideContent2", "showContent", 400);
    } else {
        linkText = "Saber más";
        $content.switchClass("showContent", "hideContent2", 400);
    };

    $this.text(linkText);
});