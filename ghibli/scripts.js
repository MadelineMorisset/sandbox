// Création du lien avec la div de classe 'root' dans l'index.html
const app = document.getElementById("root");

// Création d'une balise img dans l'index
const logo = document.createElement("img");
// On ajoute le logo à la balise img qu'on vient de créer ci-dessus
logo.src = "./logo.png";

// Création d'une nouvelle balise div
const container = document.createElement("div");
// À laquelle on attribut une classe "container"
container.setAttribute("class", "container");

// On ajoute maintenant le logo et le container dans la div "root"
app.appendChild(logo);
app.appendChild(container);

// ----------------------------- Avec XMLHttpRequest() -----------------------------
// Base des connexion API (ancienne méthode)
// Créer une variable de requête à laquelle on attribut un nouvel objet XMLHttpRequest
// var request = new XMLHttpRequest();

// // Ouvrir une nouvelle connexion en utilisant la requête GET sur le endpoint de l'URL
// request.open("GET", "https://ghibli.rest/films", true);

// request.onload = function () {
//   // Accéder aux données JSON ici
//   var data = JSON.parse(this.response);

//   // Afficher un résultat en fonction du code de réponse HTTP
//   // (cf : sandbox\ghibli\requestStatus_Code.png)
//   if (request.status >= 200 && request.status < 400) {
//     // Enregistrer chaque film
//     data.forEach((movie) => {
//       // // Avec console.log, afficher le titre de chaque film
//       // console.log(movie.title);
//       // // Avec console.log, afficher la description de chaque film
//       // console.log(movie.description);

//       // Créer une div "card" pour chaque film
//       const card = document.createElement("div");
//       card.setAttribute("class", "card");

//       // Créer un h1, et y ajouter le titre du film dedans
//       const h1 = document.createElement("h1");
//       h1.textContent = movie.title;

//       // Créer un paragraphe dans lequel on ajoute la description du film
//       const p = document.createElement("p");
//       if (movie.description.length > 300) {
//         // On limite le nombre de caractères de la description de chaque film à 300 max
//         movie.description = movie.description.substring(0, 300);
//         // `${movie.description}...` permet d'indiquer que le texte a été tronqué
//         p.textContent = `${movie.description}...`;
//       } else {
//         // Sinon, on affiche la description entière
//         p.textContent = movie.description;
//       }

//       // On ajoute les cards à l'élément container
//       container.appendChild(card);

//       // Et on ajoute dans chaque élément card, un h1 et un p
//       card.appendChild(h1);
//       card.appendChild(p);
//     });
//   } else {
//     // // Avec console.log, on informe qu'il y a eu une erreur
//     // console.log("Il y a eu une erreur lors de la requête.");

//     // Si la requête échoue, un élément <marquee> est créé pour afficher un message d'erreur dans un élément app
//     const errorMessage = document.createElement("marquee");
//     errorMessage.textContent = "Il y a eu une erreur lors de la requête.";
//     app.appendChild(errorMessage);
//   }
// };

// // Envoit de la requête
// request.send();

// ----------------------------- Avec fetch() -----------------------------
// Alternative à la méthode XMLHttpRequest avec fetch (méthode moderne)
async function getData() {
  try {
    // Ouvrir une nouvelle connexion en utilisant la requête GET sur le endpoint de l'URL
    const response = await fetch("https://ghibli.rest/films");

    // Afficher un résultat en fonction du code de réponse HTTP
    // (cf : sandbox\ghibli\requestStatus_Code.png)
    if (response.status >= 200 && response.status < 400) {
      // Accéder aux données JSON ici
      const data = await response.json();

      // Enregistrer chaque film
      data.forEach((movie) => {
        // // Avec console.log, afficher le titre de chaque film
        // console.log(movie.title);
        // // Avec console.log, afficher la description de chaque film
        // console.log(movie.description);

        // Créer une div "card" pour chaque film
        const card = document.createElement("div");
        card.setAttribute("class", "card");

        // Créer un h1, et y ajouter le titre du film dedans
        const h1 = document.createElement("h1");
        h1.textContent = movie.title;

        // Créer un paragraphe dans lequel on ajoute la description du film
        const p = document.createElement("p");
        if (movie.description.length > 300) {
          // On limite le nombre de caractères de la description de chaque film à 300 max
          movie.description = movie.description.substring(0, 300);
          // `${movie.description}...` permet d'indiquer que le texte a été tronqué
          p.textContent = `${movie.description}...`;
        } else {
          // Sinon, on affiche la description entière
          p.textContent = movie.description;
        }

        // On ajoute les cards à l'élément container
        container.appendChild(card);

        // Et on ajoute dans chaque élément card, un h1 et un p
        card.appendChild(h1);
        card.appendChild(p);
      });
    } else {
      // Avec console.log, on informe qu'il y a eu une erreur
      console.log("Il y a eu une erreur lors de la requête.");
    }
  } catch (error) {
    // // Avec console.log, on informe qu'il y a eu une erreur
    // console.log("Il y a eu une erreur lors de la requête.");

    // Si la requête échoue, un élément <marquee> est créé pour afficher un message d'erreur dans un élément app
    const errorMessage = document.createElement("marquee");
    errorMessage.textContent = "Il y a eu une erreur lors de la requête.";
    app.appendChild(errorMessage);
  }
}

// Appeler la fonction pour récupérer les données
getData();
