$(document).ready(function () {
  function changePos() {
    var header = document.getElementById("navigation");
    if (window.pageYOffset > 0) {
      header.classList.add("fixed-top");
    } else {
      header.classList.remove("fixed-top");
    }
  }

  window.onscroll = changePos;
});

//administration Tabs
function openTab(evt, tabName) {
  let i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab_content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

//gallery image scrolling
$(document).on("click", "a.controls", function () {
  let index = $(this).attr("href");
  let src = $("ul.row li:nth-child(" + index + ") img").attr("src");
  //added by Anuj
  src = src.replace("gal_thumbs/", "");
  //
  $(".modal-body img").attr("src", src);

  let newPrevIndex = parseInt(index) - 1;
  let newNextIndex = parseInt(newPrevIndex) + 2;
  if ($(this).hasClass("previous")) {
    $(this).attr("href", newPrevIndex);
    $("a.next").attr("href", newNextIndex);
  } else {
    $(this).attr("href", newNextIndex);
    $("a.previous").attr("href", newPrevIndex);
  }

  let total = $("ul.row li").length + 1;
  //hide next button
  if (total === newNextIndex) {
    $("a.next").hide();
  } else {
    $("a.next").show();
  }
  //hide previous button
  if (newPrevIndex === 0) {
    $("a.previous").hide();
  } else {
    $("a.previous").show();
  }
  return false;
});

// photo Gallery
$(document).ready(function () {
  $("li img").on("click", function () {
    let src = $(this).attr("src");

    // src = src.replace('gal_thumbs','gallery');
    let img = '<img src="' + src + '" class="img-fluid"/>';
    //start of new code new code
    let index = $(this).parent("li").index();
    let html = "";
    html += img;
    html += "<div>";
    html +=
      '<a class="controls next" href="' +
      (index + 2) +
      '"><i class="fa fa-arrow-right"></i></a>';
    html +=
      '<a class="controls previous" href="' +
      index +
      '"><i class="fa fa-arrow-left"></i></a>';
    html += "</div>";

    $("#myModal").modal();
    $("#myModal").on("shown.bs.modal", function () {
      $("#myModal .modal-body").html(html);
      //new code
      $("a.controls").trigger("click");
    });
    $("#myModal").on("hidden.bs.modal", function () {
      $("#myModal .modal-body").html("");
    });
  });
});

//boarders list
function LoadBoarderDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      getBoarders(this);
    }
  };
  xmlhttp.open("GET", "./sources/boarder.xml", true);
  xmlhttp.send();
}

function getBoarders(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table =
    "<thead class='thead-dark'><tr><th>#</th><th>Name</th><th>Program</th><th>Room</th></tr><thead>";
  var x = xmlDoc.getElementsByTagName("boarders");
  for (i = 0; i < x.length; i++) {
    table +=
      "<tr><td>" +
      (i + 1) +
      "</td><td>" +
      x[i]
        .getElementsByTagName("name")[0]
        .childNodes[0].nodeValue.toUpperCase() +
      "</td><td>" +
      x[i]
        .getElementsByTagName("course")[0]
        .childNodes[0].nodeValue.toUpperCase() +
      "</td><td>" +
      x[i]
        .getElementsByTagName("room")[0]
        .childNodes[0].nodeValue.toUpperCase() +
      "</td></tr>";
  }
  document.getElementById("boarder_xml").innerHTML = table;
}

// // Notification list
function LoadNotifications() {
  let xml_http = new XMLHttpRequest();
  xml_http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      getNotification(this);
    }
  };
  xml_http.open("GET", "./sources/notifications.xml", true);
  xml_http.send();
}
function getNotification(xml) {
  let i;
  let xmlDoc = xml.responseXML.documentElement;
  let msg =
    "<marquee behavior='scroll' scrollamount='3' direction='up' onmouseover='this.stop();' onmouseout='this.start();'> ";
  let x = xmlDoc.getElementsByTagName("notification");
  for (i = 0; i < x.length; i++) {
    msg +=
      "<p>" +
      x[i]
        .getElementsByTagName("massage")[0]
        .childNodes[0].nodeValue.toString() +
      // x[i].getElementsByTagName("links")[0].childNodes[0].nodeValue.toString() +
      "</p><hr style='background-color: papayawhip;'> ";
  }
  msg += "</marquee>";
  document.getElementById("updates").innerHTML = msg;
}
