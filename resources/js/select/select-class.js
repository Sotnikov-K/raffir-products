const getTemplate = (data = [], placeholder, selectedId) => {
    let text = placeholder ?? 'Placeholder по умолчанию'
    const items = data.map(item => {
        let cls = '';
        if (item.id === selectedId) {
            text = item.value;
            cls = 'selected';
        }
        return `
            <li class="sellect__item ${cls}" data-type="item" data-id="${item.id}">${item.value}</li>
        `
    });
    return `
        <div class="sellect__backdrop" data-type="backdrop"></div>
        <div class="sellect__input" data-type="input">
            <span data-type="value">${text}</span>
            <div class="sellect__icon"><img src="/images/icons/expand/expand_more-w.svg" data-type="arrow"></div>
        </div>
        <div class="sellect__dropdown">
            <ul class="sellect__list">
                ${items.join('')}
            </ul>
        </div>    
    `
}



export class Select {

    constructor(selector, options) {
        this.$el = document.querySelector(selector);
        this.options = options;
        this.selectedId = options.selectedId;

        this.#render();
        this.#setup();
    }



    #render() {
        const { placeholder, data } = this.options;
        this.$el.classList.add('sellect');
        this.$el.innerHTML = getTemplate(data, placeholder, this.selectedId);
    }

    #setup() {
        this.clickHandler = this.clickHandler.bind(this);
        this.$el.addEventListener('click', this.clickHandler);
        this.$arrow = this.$el.querySelector('[data-type="arrow"]');
        this.$value = this.$el.querySelector('[data-type="value"]');
    }

    clickHandler(event) {
        const { type } = event.target.dataset;



        if (type === 'input') {
            this.toggle();
        } else if (type === 'item') {
            const id = event.target.dataset.id;
            this.select(id);
        } else if (type === 'backdrop') {
            this.close();
        }
    }

    toggle() {
        this.isOpen ? this.close() : this.open();
    }

    get isOpen() {
        return this.$el.classList.contains('open');
    }

    get current() {
        return this.options.data.find(item => item.id === this.selectedId);
    }

    select(id) {
        this.selectedId = id;
        this.$value.textContent = this.current.value;

        this.$el.querySelectorAll('[data-type="item"]').forEach(el => {
            el.classList.remove('selected');
        })

        this.$el.querySelector(`[data-id="${id}"]`).classList.add('selected');

        this.options.onSelect ? this.options.onSelect(this.current) : null;


        this.close();
    }

    open() {
        this.$el.classList.add('open');
        //написать поворот стрелки при открытии
        // this.$arrow
        // this.$arrow.classList.remove('sellect__icon')
    }

    close() {
        this.$el.classList.remove('open');
    }

    destroy() {
        this.$el.removeEventListener('click', this.clickHandler);
        this.$el.innerHTML = '';
    }

}