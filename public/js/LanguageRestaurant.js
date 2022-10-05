function toggleLanguage(language) {
  let transContact = document.getElementById("transContact");
  if (language === "Español") {
    transContact.innerHTML =
      '<i class="far fa-envelope-open me-1"></i>' + "Contacta";
  } else {
    transContact.innerHTML =
      '<i class="far fa-envelope-open me-1"></i>' + "Contact us";
  }
  let transFind = document.getElementById("transFind");
  if (language === "Español") {
    transFind.innerHTML =
      '<i class="far fa-map me-1"></i>' + "Como encontrarnos";
  } else {
    transFind.innerHTML = '<i class="far fa-map me-1"></i>' + "Contact us";
  }
  let transPhone = document.getElementById("transPhone");
  if (language === "Español") {
    transPhone.innerHTML =
      '<i class="fas fa-mobile-alt me-1"></i>' + "Teléfono";
  } else {
    transPhone.innerHTML = '<i class="fas fa-mobile-alt me-1"></i>' + "Phone";
  }
  let transMenu1 = document.getElementById("transMenu1");
  if (language === "Español") {
    transMenu1.innerHTML = "Hotel";
  } else {
    transMenu1.innerHTML = "Hotel";
  }
  let transMenu2 = document.getElementById("transMenu2");
  if (language === "Español") {
    transMenu2.innerHTML = "Restaurante";
  } else {
    transMenu2.innerHTML = "Restaurant";
  }
  // let transMenu3 = document.getElementById("transMenu3");
  // if (language === "Español") {
  //   transMenu3.innerHTML = "Entorno";
  // } else {
  //   transMenu3.innerHTML = "Surrounding";
  // }
  let transRtTitle = document.getElementById("transRtTitle");
  if (language === "Español") {
    transRtTitle.innerHTML = "Restaurante Sabor Canario";
  } else {
    transRtTitle.innerHTML = "Sabor Canario Restaurant";
  }
  let transRtSubTitle = document.getElementById("transRtSubTitle");
  if (language === "Español") {
    transRtSubTitle.innerHTML = "Comida típica Canaria y Española";
  } else {
    transRtSubTitle.innerHTML = "Typical Canary and Spanish food";
  }
  let transRtYummyTitle = document.getElementById("transRtYummyTitle");
  if (language === "Español") {
    transRtYummyTitle.innerHTML = "Para comer";
  } else {
    transRtYummyTitle.innerHTML = "For eat";
  }
  let transRtYummy = document.getElementById("transRtYummy");
  if (language === "Español") {
    transRtYummy.innerHTML =
      "La cocina es dirigida por uno de los propietarios, en la cuál se elaboran recetas tradicionales con el mejor género del mercado.";
  } else {
    transRtYummy.innerHTML =
      "The kitchen is run by one of the owners, in whitch are made traditional recipies with the best quality products.";
  }
  // let transRtMenu = document.getElementById("transRtMenu");
  // if (language === "Español") {
  //   transRtMenu.innerHTML = "Nuestra carta";
  // } else {
  //   transRtMenu.innerHTML = "Our menu";
  // }
  // let foodTitle11 = document.getElementById("foodTitle11");
  // if (language === "Español") {
  //   foodTitle11.innerHTML = "";
  // } else {
  //   foodTitle11.innerHTML = "";
  // }
  // let foodTitle21 = document.getElementById("foodTitle21");
  // if (language === "Español") {
  //   foodTitle21.innerHTML = "";
  // } else {
  //   foodTitle21.innerHTML = "";
  // }
  // let foodTitle31 = document.getElementById("foodTitle31");
  // if (language === "Español") {
  //   foodTitle31.innerHTML = "";
  // } else {
  //   foodTitle31.innerHTML = "";
  // }
  // let foodTitle41 = document.getElementById("foodTitle41");
  // if (language === "Español") {
  //   foodTitle41.innerHTML = "";
  // } else {
  //   foodTitle41.innerHTML = "";
  // }
  // let foodTitle12 = document.getElementById("foodTitle12");
  // if (language === "Español") {
  //   foodTitle12.innerHTML = "";
  // } else {
  //   foodTitle12.innerHTML = "";
  // }
  // let foodTitle22 = document.getElementById("foodTitle22");
  // if (language === "Español") {
  //   foodTitle22.innerHTML = "";
  // } else {
  //   foodTitle22.innerHTML = "";
  // }
  // let foodTitle32 = document.getElementById("foodTitle32");
  // if (language === "Español") {
  //   foodTitle32.innerHTML = "";
  // } else {
  //   foodTitle32.innerHTML = "";
  // }
  // let foodTitle42 = document.getElementById("foodTitle42");
  // if (language === "Español") {
  //   foodTitle42.innerHTML = "";
  // } else {
  //   foodTitle42.innerHTML = "";
  // }
  // let foodDescrip11 = document.getElementById("foodDescrip11");
  // if (language === "Español") {
  //   foodDescrip11.innerHTML = "";
  // } else {
  //   foodDescrip11.innerHTML = "";
  // }
  // let foodDescrip21 = document.getElementById("foodDescrip21");
  // if (language === "Español") {
  //   foodDescrip21.innerHTML = "";
  // } else {
  //   foodDescrip21.innerHTML = "";
  // }
  // let foodDescrip31 = document.getElementById("foodDescrip31");
  // if (language === "Español") {
  //   foodDescrip31.innerHTML = "";
  // } else {
  //   foodDescrip31.innerHTML = "";
  // }
  // let foodDescrip41 = document.getElementById("foodDescrip41");
  // if (language === "Español") {
  //   foodDescrip41.innerHTML = "";
  // } else {
  //   foodDescrip41.innerHTML = "";
  // }
  // let foodDescrip12 = document.getElementById("foodDescrip12");
  // if (language === "Español") {
  //   foodDescrip12.innerHTML = "";
  // } else {
  //   foodDescrip12.innerHTML = "";
  // }
  // let foodDescrip22 = document.getElementById("foodDescrip22");
  // if (language === "Español") {
  //   foodDescrip22.innerHTML = "";
  // } else {
  //   foodDescrip22.innerHTML = "";
  // }
  // let foodDescrip32 = document.getElementById("foodDescrip32");
  // if (language === "Español") {
  //   foodDescrip32.innerHTML = "";
  // } else {
  //   foodDescrip32.innerHTML = "";
  // }
  // let foodDescrip42 = document.getElementById("foodDescrip42");
  // if (language === "Español") {
  //   foodDescrip42.innerHTML = "";
  // } else {
  //   foodDescrip42.innerHTML = "";
  // }
  let transEventsTitle = document.getElementById("transEventsTitle");
  if (language === "Español") {
    transEventsTitle.innerHTML = "Eventos y celebraciones";
  } else {
    transEventsTitle.innerHTML = "Events and celebrations";
  }
  let transEvents = document.getElementById("transEvents");
  if (language === "Español") {
    transEvents.innerHTML = "Celebramos todo tipo de eventos, consúltanos para conocer nuestras posibilidades.";
  } else {
    transEvents.innerHTML = "We host all kind of events, ask us to know your options.";
  }
  let transRtQuestion1 = document.getElementById("transRtQuestion1");
  if (language === "Español") {
    transRtQuestion1.innerHTML = "Llámanos";
  } else {
    transRtQuestion1.innerHTML = "Call us";
  }
  let transRtQuestion2 = document.getElementById("transRtQuestion2");
  if (language === "Español") {
    transRtQuestion2.innerHTML = "Envianos un email";
  } else {
    transRtQuestion2.innerHTML = "Send us an email";
  }
  let transRtQuestion3 = document.getElementById("transRtQuestion3");
  if (language === "Español") {
    transRtQuestion3.innerHTML = "Pásate y hablamos";
  } else {
    transRtQuestion3.innerHTML = "Better talk in person";
  }
  if (language === "Español") {
    document.getElementsByName("name")[0].placeholder = "Nombre";
  } else {
    document.getElementsByName("name")[0].placeholder = "Name";
  }
  if (language === "Español") {
    document.getElementsByName("phone")[0].placeholder = "Teléfono";
  } else {
    document.getElementsByName("phone")[0].placeholder = "Phone";
  }
  let transDoubs = document.getElementById("transDoubs");
  if (language === "Español") {
    transDoubs.innerHTML = "¿Dudas?";
  } else {
    transDoubs.innerHTML = "¿Doubs?";
  }
  let transRtForm1 = document.getElementById("transRtForm1");
  if (language === "Español") {
    transRtForm1.innerHTML = "Escribir aqui...";
  } else {
    transRtForm1.innerHTML = "Write here...";
  }
  let transRtForm2 = document.getElementById("transRtForm2");
  if (language === "Español") {
    transRtForm2.innerHTML = "Enviar";
  } else {
    transRtForm2.innerHTML = "Send";
  }
  let transFooter1 = document.getElementById("transFooter1");
  if (language === "Español") {
    transFooter1.innerHTML = "Contacto";
  } else {
    transFooter1.innerHTML = "Contact";
  }
  let transFooter12 = document.getElementById("transFooter12");
  if (language === "Español") {
    transFooter12.innerHTML =
      '<i class="far fa-map me-3"></i>' + "Localización";
  } else {
    transFooter12.innerHTML = '<i class="far fa-map me-3"></i>' + "Location";
  }
  let transSocial = document.getElementById("transSocial");
  if (language === "Español") {
    transSocial.innerHTML = "Conecta con nosotros";
  } else {
    transSocial.innerHTML = "Connect with us";
  }
  let transSocial1 = document.getElementById("transSocial1");
  if (language === "Español") {
    transSocial1.innerHTML = "Tarjetas aceptadas";
  } else {
    transSocial1.innerHTML = "Accepted cards";
  }
  let transRegistered = document.getElementById("transRegistered");
  if (language === "Español") {
    transRegistered.innerHTML = "&regEsta web ha sido desarrollada por " + "<a class='text-decoration-none text-dark' id='register' href='https://WebsiWebs.es'>" + "WebsiWebs" + "</a>" + " con cariño, HTML, CSS y JS.";
    ;
  } else {
    transRegistered.innerHTML = "&regThis website has been developed by " + "<a class='text-decoration-none text-dark' id='register' href='https://WebsiWebs.es'>" + "WebsiWebs" + "</a>" + " with care, HTML, CSS and JS.";
  }
}
