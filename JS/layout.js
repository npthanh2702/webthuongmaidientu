$("#user").click();
$("#study").click();

if (sessionStorage.isLogin == null) sessionStorage.isLogin = 0;
if (sessionStorage.isLogin == 1)
{
  $("#user").html("<span style=\"text-decoration:none !important\"><i class=\"mr-1 fas fa-user-circle\"></i><div class=\"d-none d-xl-inline\">" + localStorage.KZ_username + "</div></span>");
  $(".btnUser").removeAttr("style");
}
else $("#frmLogin").removeAttr("style");

// if scrollTop behind btnSidebarCollapse show btn Study on Navbar
if ($(this).innerWidth() >= 992)
  if ($(this).scrollTop() > parseInt($("button.btnSidebarCollapse").offset().top) + parseInt($("button.btnSidebarCollapse").height()))
    $(".layout-btnSidebarCollapse").removeClass("d-none");
  else
    $(".layout-btnSidebarCollapse").addClass("d-none");

// Script Btn Sidebar Collapse
$(".btnSidebarCollapse").click(function ()
{
  if ($("#sidebar").hasClass("closed"))
  {
    $("#sidebar").removeClass("closed").animate({ "margin-left": "0px" });
    $(".brand img").css("height", "0").css("margin-right", "0");
  }
  else
  {
    $("#sidebar").animate({ "margin-left": "-250px" }, function () { $("#sidebar").addClass("closed") });
    $(".brand img").css("height", "30").css("margin-right", "1.25rem");
  }
});


// when sroll, if scrollTop behind btnSidebarCollapse show btn Study on Navbar
$(window).scroll(function ()
{
  if ($(this).innerWidth() >= "992")
    if ($(this).scrollTop() > parseInt($("button.btnSidebarCollapse").offset().top) + parseInt($("button.btnSidebarCollapse").height()))
      $(".layout-btnSidebarCollapse").removeClass("d-none");
    else
      $(".layout-btnSidebarCollapse").addClass("d-none");
});