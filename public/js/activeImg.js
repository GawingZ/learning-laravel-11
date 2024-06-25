document.addEventListener('DOMContentLoaded', function() {
            const mainImage = document.getElementsByClassName('img-main')[0];
            const imageCards = document.getElementsByClassName('img-card');

            mainImage.src = imageCards[0].src;
            imageCards[0].parentElement.classList.add('border-2', 'border-red-500');

            for (let i = 0; i < imageCards.length; i++) {
                const imgCard = imageCards[i];
                imgCard.addEventListener('click', () => {
                    mainImage.src = imgCard.src;

                    for (let j = 0; j < imageCards.length; j++) {
                        imageCards[j].parentElement.classList.remove('border-2', 'border-red-500');
                    }

                    imgCard.parentElement.classList.add('border-2', 'border-red-500');
                });
            }
        });