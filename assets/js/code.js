
const username = 'yulicv';

async function updateProfileImage() {
    try {
        const response = await fetch(`https://api.github.com/users/${username}`);

        if (response.ok) {
            const userData = await response.json();
            const newProfileImageURL = userData.avatar_url;
            const profileImageElement = document.getElementById('profile-image');

            profileImageElement.src = newProfileImageURL;
        } else {
            console.error('Error al obtener los datos de GitHub.');
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

// Llama a la función para actualizar la imagen de perfil al cargar la página.
updateProfileImage();

document.addEventListener("DOMContentLoaded", function () {
    var backToTopButton = document.getElementById("back-to-top");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            // Muestra el botón cuando te desplazas hacia abajo
            backToTopButton.style.display = "block";
        } else {
            // Oculta el botón cuando vuelves hacia arriba
            backToTopButton.style.display = "none";
        }
    });
});
