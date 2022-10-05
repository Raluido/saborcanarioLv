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
  let transMainMenu = document.getElementById("transMainMenu");
  if (language === "Español") {
    transMainMenu.innerHTML = "HOTEL RURAL OROTAVA";
  } else {
    transMainMenu.innerHTML = "OROTAVA RURAL HOTEL";
  }
  // let transAdults = document.getElementById("transAdults");
  // if (language === "Español") {
  //   transAdults.innerHTML = "Adultos";
  // } else {
  //   transCheckOut.innerHTML = "Adults";
  // }
  // let transChildren = document.getElementById("transChildren");
  // if (language === "Español") {
  //   transChildren.innerHTML = "Niños";
  // } else {
  //   transCheckOut.innerHTML = "Children";
  // }
  if (language === "Español") {
    document.getElementsByName("check_in_date")[0].placeholder = "Llegada";
  } else {
    document.getElementsByName("check_in_date")[0].placeholder = "Check in";
  }
  if (language === "Español") {
    document.getElementsByName("check_out_date")[0].placeholder = "Salida";
  } else {
    document.getElementsByName("check_out_date")[0].placeholder = "Check out";
  }
  let transAvailable = document.getElementById("transAvailable");
  if (language === "Español") {
    transAvailable.innerHTML = "Ver disponibilidad";
  } else {
    transAvailable.innerHTML = "Check available";
  }
  let transHotelTitle = document.getElementById("transHotelTitle");
  if (language === "Español") {
    transHotelTitle.innerHTML = "La casa";
  } else {
    transHotelTitle.innerHTML = "The house";
  }
  let transHotel = document.getElementById("transHotel");
  if (language === "Español") {
    transHotel.innerHTML =
      "El hotel se encuentra en una casa del siglo XVII, situada en el casco historico de la Villa de La Orotava. En su interior contiene dos patios con balconada en dónde poder disfrutar de nuestra gastronomía. En la segunda planta disponemos de 8 habitaciones con decoración de la época y techos artesados de madera de tea.";
  } else {
    transHotel.innerHTML =
    "The house was built in XVII century and it is located in the old quarter of The Orotava Village. Inside his walls there are two terraces with a row of balconies where you can enjoy our gastronomy. In the second floor there are 8 rooms availables with vintage furniture and coffered ceilings.";
    ;
  }
  let transValleyTitle = document.getElementById("transValleyTitle");
  if (language === "Español") {
    transValleyTitle.innerHTML = "El valle";
  } else {
    transValleyTitle.innerHTML = "The valley";
  }
  let transRoomsTitle = document.getElementById("transRoomsTitle");
  if (language === "Español") {
    transRoomsTitle.innerHTML = "Habitaciones";
  } else {
    transRoomsTitle.innerHTML = "Rooms";
  }
  let transRooms = document.getElementById("transRooms");
  if (language === "Español") {
    transRooms.innerHTML =
      "Disponemos de 8 habitaciones que pueden hospedar de 2 a 4 personas.";
  } else {
    transRooms.innerHTML = "We've got 8 rooms with from 2 to 4 person capacity.";
  }
  let transPublicTitle = document.getElementById("transPublicTitle");
  if (language === "Español") {
    transPublicTitle.innerHTML = "Zonas comunes";
  } else {
    transPublicTitle.innerHTML = "Public areas";
  }
  let transPublic = document.getElementById("transPublic");
  if (language === "Español") {
    transPublic.innerHTML =
      "Nada más subir las escaleras llegamos a un luminoso corredor con ventanales al patio. Este conecta con las diferentes estancias del hotel, así como del salón biblioteca, decorado con utensilios guanches y castellanos de la época de la conquista dónde poder disfrutar de un lugar de lectura y relax." + '<br>' + "El desayuno se sirve en la cocina original de la casa, un momento en el cuál podrás transportarte a épocas pasadas. ";
  } else {
    transPublic.innerHTML =
      "As soon as you have climbed the stairs you've got a lighter corridor with large windows open to the terrace. The corridor connects with all the rooms, included the library, decorated with aboriginal and castilian utensils from the conquest period where you can enjoy reading or just chilling out." + '<br>' + "Breakfast is served in the house original's kitchen, a moment to transport yourself to the past.";
  }
  let transHowToGet = document.getElementById("transHowToGet");
  if (language === "Español") {
    transHowToGet.innerHTML = "Cómo llegar";
  } else {
    transHowToGet.innerHTML = "How to get it";
  }
  let transRateTitle = document.getElementById("transRateTitle");
  if (language === "Español") {
    transRateTitle.innerHTML = "Estancia 5 estrellas ****";
  } else {
    transRateTitle.innerHTML = "Five stars hotel *****";
  }
  let transRate = document.getElementById("transRate");
  if (language === "Español") {
    transRate.innerHTML =
      "Estancia elegida por los usuarios de Tripadvisor en 2020.";
  } else {
    transRate.innerHTML = "Tripsadvisor user's choosen on 2020.";
  }
  let transDatesTitle = document.getElementById("transDatesTitle");
  if (language === "Español") {
    transDatesTitle.innerHTML = "Fechas señaladas";
  } else {
    transDatesTitle.innerHTML = "Special dates";
  }
  let transDates = document.getElementById("transDates");
  if (language === "Español") {
    transDates.innerHTML =
      "Para fechas especiales, consúltamos para conocer nuestras tarifas.";
  } else {
    transDates.innerHTML =
      "For special dates, ask us to know our rates.";
  }
  let transSpecial1Title = document.getElementById("transSpecial1Title");
  if (language === "Español") {
    transSpecial1Title.innerHTML = "Noche buena";
  } else {
    transSpecial1Title.innerHTML = "Christmas Eve";
  }
  let transSpecial1 = document.getElementById("transSpecial1");
  if (language === "Español") {
    transSpecial1.innerHTML =
      "Pasa una noche de ensueño llena de tranquilidad y magia con nosotros.";
  } else {
    transSpecial1.innerHTML =
      "Spend a special night full of quiet and magic with us.";
  }
  let transSpecial2Title = document.getElementById("transSpecial2Title");
  if (language === "Español") {
    transSpecial2Title.innerHTML = "Fin de año";
  } else {
    transSpecial2Title.innerHTML = "New Year's Eve";
  }
  let transSpecial2 = document.getElementById("transSpecial2");
  if (language === "Español") {
    transSpecial2.innerHTML =
      "Disfruta de una cena especial en nuestro restaurante, brinda con nosotros y disfruta de una noche especial.";
  } else {
    transSpecial2.innerHTML =
      "Enjoy the special New Year dinner in our restaurant, toast and live this special night with us.";
  }
  let transSpecial3Title = document.getElementById("transSpecial3Title");
  if (language === "Español") {
    transSpecial3Title.innerHTML = "Fiestas del Corpus Christi";
  } else {
    transSpecial3Title.innerHTML = "Corpus Christi Celebrations";
  }
  let transSpecial3 = document.getElementById("transSpecial3");
  if (language === "Español") {
    transSpecial3.innerHTML =
      "Desde el jueves al domingo disfrutarás de 3 noches de enventos en donde se darán lugar muestras culturales propias de la región.";
  } else {
    transSpecial3.innerHTML =
      "From thursday until sunday you'll live as we are  in our anual village celebrations.";
  }
  let transDoubs = document.getElementById("transDoubs");
  if (language === "Español") {
    transDoubs.innerHTML = "¿Dudas?";
  } else {
    transDoubs.innerHTML = "¿Doubs?";
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
  let transDoubs1 = document.getElementById("transDoubs1");
  if (language === "Español") {
    transDoubs1.innerHTML = "Comentarios";
  } else {
    transDoubs1.innerHTML = "Comments";
  }
  let transDoubs2 = document.getElementById("transDoubs2");
  if (language === "Español") {
    transDoubs2.innerHTML = "Enviar";
  } else {
    transDoubs2.innerHTML = "Send";
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
  let transValley = document.getElementById("transValley");
  if (language === "Español") {
    transValley.innerHTML = "La Orotava es un municipio perteneciente a la provincia de Santa Cruz de Tenerife, en la isla de Tenerife (Canarias, España). La capital municipal está localizada en la Villa de La Orotava, situada a unos 360 m s. n. m.." + '<br>' + "El casco histórico de La Orotava fue declarado Conjunto Histórico Artístico Nacional en 1976 y se encuentra incluido en el Inventario de Protección del Patrimonio Cultural Europeo como Conjunto Monumental." + '<br>' + "Además, es destacable que gran parte del parque nacional del Teide (declarado Patrimonio de la Humanidad en 2007) se encuentra dentro de su término municipal. La Orotava es también el municipio más alto de España y con mayor desnivel, su término municipal llega desde el nivel del mar, hasta los 3.718 metros del pico Teide (el pico más alto de España)." + '<br>' + "Junto con los municipios vecinos de Los Realejos y Puerto de la Cruz forma el Área metropolitana del Valle de La Orotava con 108.721 habitantes (2019).";
    ;
  } else {
    transValley.innerHTML = "La Orotava is a town and a municipality in the northern part of Tenerife, one of the Canary Islands of Spain. The area of the municipality stretches from the north coast to the mountainous interior, and includes the summit of the Teide volcano, Canary Islands' and Spain's highest point at 3,718 m. At 207.31 km2, it is the largest municipality of the island of Tenerife. The population is 41,255." + '<br>' + "The town La Orotava, which is the administrative centre of the municipality and also its largest settlement, is situated near the north coast, at about 400 m elevation in the Orotava Valley. It is 4 km southeast of Puerto de la Cruz and 28 km southwest of the island's capital, Santa Cruz de Tenerife. The TF-5 motorway passes through the north of the municipality."+ '<br>' + "The historic center of La Orotava was declared Conjunto histórico in 1976 and is included in the Inventory of the European Cultural Heritage Protection and Monumental. Also noteworthy is that much of the Teide National Park (a World Heritage Site in 2007) is located within the municipality. La Orotava is also the highest town of Spain and steepest, the municipality comes from sea level up to 3718 meters the Teide (the highest peak in Spain).";
  }
  let transRegistered = document.getElementById("transRegistered");
  if (language === "Español") {
    transRegistered.innerHTML = "&regEsta web ha sido desarrollada por " + "<a class='text-decoration-none text-dark' id='register' href='https://WebsiWebs.es'>" + "WebsiWebs" + "</a>" + " con cariño, HTML, CSS y JS.";
    ;
  } else {
    transRegistered.innerHTML = "&regThis website has been developed by " + "<a class='text-decoration-none text-dark' id='register' href='https://WebsiWebs.es'>" + "WebsiWebs" + "</a>" + " with care, HTML, CSS and JS.";
  }
}
