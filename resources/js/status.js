if (document.querySelector('.database__item-status')) {
    let status = document.querySelectorAll('.database__item-content-status > span');

    status.forEach(element => {
        let statusIcon = element.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('.database__item-status');

        if (element.innerHTML === 'new') {
            statusIcon.style.backgroundColor = 'rgb(101 225 97)';
            statusIcon.style.opacity = 0.9;
        }

        else if (element.innerHTML === 'sold') {
            statusIcon.style.backgroundColor = 'white';
            statusIcon.style.opacity = 1;
        }

        else if (element.innerHTML === 'standart') {
            statusIcon.style.backgroundColor = 'rgb(150, 172, 175)';
            statusIcon.style.opacity = 1;
        }

        else if (element.innerHTML === 'hot') {
            statusIcon.style.backgroundColor = 'red';
            statusIcon.style.opacity = 0.5;
        }

    });

}