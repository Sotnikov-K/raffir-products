if (document.querySelector('.databaseItem-span-status')) {
    let status = document.querySelector('.databaseItem-span-status');
    if (status.innerHTML === 'on sale') {
        status.classList.add('databaseItem-span-onsale-status');
    } else if (status.innerHTML === 'standart') {
        status.classList.add('databaseItem-span-standart-status');
    }
}