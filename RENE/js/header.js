const hover = document.querySelector(".h_hover");
const about = document.querySelector(".h_client");
const bt_catalog = document.querySelector(".catalog");
const catalog = document.querySelector(".h_catalog");
const overlay = document.querySelector(".h_overlay");

hover.addEventListener("mouseenter", function() {
  if(catalog.style.display === "none"){
    about.style.display = "flex";

  }
  if(catalog.style.display === "block"){
    about.style.display = "flex";
    catalog.style.display = "none";
    overlay.style.display = "none";
    document.body.style.overflow = "auto";
  }
});


about.addEventListener("mouseleave", function() {
  about.style.display = "none";
  overlay.style.display = "none";
  document.body.style.overflow = "auto";
});

bt_catalog.addEventListener("click", function() {
  if(catalog.style.display === "block"){
    catalog.style.display = "none";    
    document.body.style.overflow = "auto";
    overlay.style.display = "none"
  }
  else{
    catalog.style.display = "block";
    about.style.display = "none"
    document.body.style.overflow = "hidden";
    overlay.style.display = "block"
  }
});

overlay.addEventListener("click", function() {
  if(overlay.style.display = "block"){
    overlay.style.display = "none";
    catalog.style.display = "none";    
    document.body.style.overflow = "auto";
  }
});
