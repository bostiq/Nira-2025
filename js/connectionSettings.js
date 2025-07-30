
  $(document).ready(function() {
    //$("h1 *").connections({ to: "div:first", class: "first" });
    $("div.step1").connections({
      to: "span.c1",
      within: ".infoG",
      tag: "inner",
      css: { zIndex: 1, border: '3px dotted #7cc5d4' }
    });
	$("div.step2").connections({
      to: ".c2",
      within: ".infoG",
      tag: "inner",
      css: { zIndex: 1, border: '3px dotted #7cc5d4' }
    });
	$("div.step3").connections({
      to: ".c3",
      within: ".infoG",
      tag: "inner",
      css: { zIndex: 1, border: '3px dotted #7cc5d4' }
    });
	$("div.step4").connections({
      to: ".c4",
      within: ".infoG",
      tag: "inner",
      css: { zIndex: 1, border: '3px dotted #7cc5d4' }
    });
	$("div.step5").connections({
      to: ".c5",
      within: ".infoG",
      tag: "inner",
      css: { zIndex: 1, border: '3px dotted #7cc5d4' }
    });
	$("connection:odd").addClass("odd");
    var connections = $("connection, inner");
    setInterval(function() {
      connections.connections("update");
    }, 100);
  });

  // $(document).ready(function() {
  //   //$("h1 *").connections({ to: "div:first", class: "first" });
  //   $("div.title1").connections({
  //     to: "div.p1",
  //     within: "div.r1",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  //   $("div.p1").connections({
  //     to: "div.items1",
  //     within: "div.r1",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });

  //   $("div.title2").connections({
  //     to: "div.p2",
  //     within: "div.r2",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  //   $("div.p2").connections({
  //     to: "div.items2",
  //     within: "div.r2",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });

  //   $("div.title3").connections({
  //     to: "div.p3",
  //     within: "div.r3",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  //   $("div.p3").connections({
  //     to: "div.items3",
  //     within: "div.r3",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });

  //   $("div.title4").connections({
  //     to: "div.p4",
  //     within: "div.r4",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  //   $("div.p4").connections({
  //     to: "div.items4",
  //     within: "div.r4",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });

  //   $("div.title5").connections({
  //     to: "div.p5",
  //     within: "div.r5",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  //   $("div.p5").connections({
  //     to: "div.items5",
  //     within: "div.r5",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });

  //   $("div.title6").connections({
  //     to: "div.p6",
  //     within: "div.r6",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  //   $("div.p6").connections({
  //     to: "div.items6",
  //     within: "div.r6",
  //     tag: "row",
  //     css: { zIndex: 1, border: '3px dotted #7cc5d4' }
  //   });
  
  // $("connection:odd").addClass("odd");
  //   var connections = $("connection, inner");
  //   setInterval(function() {
  //     connections.connections("update");
  //   }, 100);
  // });
