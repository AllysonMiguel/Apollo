class MobileMenu {
    constructor(menuMobile, navBar, navLink, botoesContainer) {
      this.menuMobile = document.querySelector(menuMobile);
      this.navBar = document.querySelector(navBar);
      this.botoesContainer = document.querySelector(botoesContainer);
      this.activeClass = "active";
  
      this.handleClick = this.handleClick.bind(this);
    }
  
    handleClick() {
      this.navBar.classList.toggle(this.activeClass);
      this.botoesContainer.classList.toggle(this.activeClass);
    }
  
    addClickEvent() {
      this.menuMobile.addEventListener("click", this.handleClick);
    }
  
    init() {
      if (this.menuMobile) {
        this.addClickEvent();
      }
      return this;
    }
  }
  
  const mobileNavBar = new MobileMenu(
    ".menu-mobile",
    ".nav-bar",
    ".nav-bar li",
    ".container-botoes"
  );
  
  mobileNavBar.init();
  

