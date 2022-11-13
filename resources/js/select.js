import { Select } from './select/select-class'


const select = new Select('#select', {
    placeholder: 'Все категории',
    // selectedId: '4',
    data: [


        { id: '1', value: 'React' },
        { id: '2', value: 'Angular' },
        { id: '3', value: 'Vue' },
        { id: '4', value: 'React Native' },
        { id: '5', value: 'Next' },
        { id: '6', value: 'Nest' },
    ],
    onSelect(item) {
        console.log(item);
    }
});