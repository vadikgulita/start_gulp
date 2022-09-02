import "./isotope.pkgd.min.js";
jQuery(function () {
  if ($(".projects__grid").length) {
    // initial filter
    let $grid = $(".projects__grid").isotope({
      layoutMode: "fitRows",
      filter: "",
    });
    // get all filters
    let filters = new Set();
    $(".projects__grid .project-bar").each(function () {
      if ($(this).data("filter"))
        $(this)
          .data("filter")
          .split(" ")
          .forEach((filterName) => {
            filters.add(filterName);
          });
    });

    // insert filter buttons
    $(".projects__filters").append(
      `<div class="projects__filter-btn active" data-filter="">All projects</div>`
    );
    filters.forEach((filter, index) => {
      $(".projects__filters").append(
        `<div class="projects__filter-btn" data-filter="${index}">${filter.replace(
          "_",
          " "
        )}</div>`
      );
    });

    $(document).on("click", ".projects__filter-btn", function () {
      $(this).addClass("active").siblings().removeClass("active");
      if ($(this).data("filter").length)
        $grid.isotope({
          filter: `[data-filter~=${$(this).data("filter")}]`,
        });
      else
        $grid.isotope({
          filter: "",
        });
    });

    function checkTitleHeight() {
      if (window.innerWidth > 767) {
        let bars = $grid.isotope("getFilteredItemElements");
        let h = [];
        console.log(111);
        $(bars).each((index, bar) => {
          $(bar).find("h5").removeAttr("style");
          if (index % 2 == 0 && index >= 2) {
            if (h[0] != h[1]) {
              $(bars)
                .eq(index - 1)
                .find("h5")
                .css("height", Math.max.apply(null, h) + "px");
              $(bars)
                .eq(index - 2)
                .find("h5")
                .css("height", Math.max.apply(null, h) + "px");
            }
          }
          h[index % 2] = $(bar).find("h5").height();
        });
        // unbinding and binding event to prevent call stack grow
        $grid.off("layoutComplete", checkTitleHeight);
        $grid.isotope({ layoutMode: "fitRows" });
        $grid.on("layoutComplete", checkTitleHeight);
      } else {
        $(".projects__grid h5").removeAttr("style");
        // unbinding and binding event to prevent call stack grow
        $grid.off("layoutComplete", checkTitleHeight);
        $grid.isotope({ layoutMode: "fitRows" });
        $grid.on("layoutComplete", checkTitleHeight);
      }
    }
    $grid.on("layoutComplete", checkTitleHeight);
  }

  if ($(".project-gallery").length) {
    let $gallery = $(".project-gallery").isotope({ layoutMode: "masonry" });
  }
});
