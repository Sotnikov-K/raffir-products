if (document.querySelector('.databaseItem-images-wrapper')) {
    let image = document.querySelector('.databaseItem-images-wrapper');
    image.classList.add('databaseItem-images-wrapper-active');

    if (document.querySelectorAll('.databaseItem-images-wrapper')) {
        let imageCollection = document.querySelectorAll('.databaseItem-images-wrapper');
        imageCollection.forEach((element) => {
            element.addEventListener('click', (event) => {
                document.querySelector('.databaseItem-images-wrapper-active').classList.remove('databaseItem-images-wrapper-active');
                el = event.currentTarget;
                el.classList.add('databaseItem-images-wrapper-active');
            })
        })
    }
}

