<div>
    <h1>Extras &amp; Add-ons</h1>
    <div class="selected-tags" id="selected-tags"></div>


    <div class="options-grid">
        <!-- Left column -->
        <div class="options-col" id="col-left"></div>
        <!-- Right column -->
        <div class="options-col" id="col-right"></div>
    </div>
</div>

<script>
    function renderOptions() {
        const colLeft = document.getElementById('col-left');
        const colRight = document.getElementById('col-right');
        colLeft.innerHTML = '';
        colRight.innerHTML = '';


        addons.forEach(addon => {
            const el = document.createElement('div');
            el.className = 'option' + (selected.has(addon.id) ? ' selected' : '');
            el.dataset.id = addon.id;
            el.innerHTML = `
<div class="radio"></div>
<span class="option-name">${addon.name}</span>
<span class="option-price">${formatPrice(addon.price)}</span>
`;
            el.addEventListener('click', () => toggle(addon.id));
            (addon.col === 'left' ? colLeft : colRight).appendChild(el);
        });
    }


    function renderTags() {
        const container = document.getElementById('selected-tags');
        container.innerHTML = '';
        addons.filter(a => selected.has(a.id)).forEach(addon => {
            const tag = document.createElement('span');
            tag.className = 'tag';
            tag.innerHTML = `${addon.name} <button class="tag-remove" aria-label="Remove ${addon.name}">✕</button>`;
            tag.querySelector('button').addEventListener('click', e => {
                e.stopPropagation();
                toggle(addon.id);
            });
            container.appendChild(tag);
        });
    }

    const addons = [{
        id: 1,
        name: 'Flea & Tick Treatment',
        price: 14,
        col: 'left'
    },
    {
        id: 2,
        name: 'Hypoallergenic Shampoo Upgrade',
        price: 20,
        col: 'left'
    },
    {
        id: 3,
        name: 'Tear-Stain Treatment',
        price: 5,
        col: 'left'
    },
    {
        id: 4,
        name: 'Coat Shine Spray',
        price: 10,
        col: 'left'
    },
    {
        id: 5,
        name: 'Nail Grinding',
        price: 25,
        col: 'left'
    },
    {
        id: 6,
        name: 'Coat Colour Enhancing Shampoo',
        price: 10,
        col: 'left'
    },
    {
        id: 7,
        name: 'Fast-Dry Service (express grooming)',
        price: 8,
        col: 'left'
    },
    {
        id: 8,
        name: 'Breath Freshner Gel',
        price: 2,
        col: 'left'
    },
    {
        id: 9,
        name: 'Deep Conditioning Mask',
        price: 20,
        col: 'right'
    },
    {
        id: 10,
        name: 'Shed-Control Shampoo',
        price: 10,
        col: 'right'
    },
    {
        id: 11,
        name: 'Deodorising Treatment',
        price: 2,
        col: 'right'
    },
    {
        id: 12,
        name: 'Anti-Itch Treatment',
        price: 10,
        col: 'right'
    },
    {
        id: 13,
        name: 'Soft-Claws / Nail Caps Application',
        price: 60,
        col: 'right'
    },
    {
        id: 14,
        name: 'Premium Fragrance Upgrade',
        price: 10,
        col: 'right'
    },
    {
        id: 15,
        name: 'Paw Fur Shaping',
        price: 23,
        col: 'right'
    },
    ];


    const selected = new Set(); // no default selections
</script>

<style>
    .selected-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 28px;
        min-height: 32px;
        margin-top: 1rem;
    }


    .tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #FFD88C;
        /* color: #fff; */
        font-size: 0.8rem;
        font-weight: 500;
        padding: 5px 12px;
        border-radius: 20px;




        color: #FFF;
        font-family: Lato;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        animation: tagPop 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
    }


    @keyframes tagPop {
        from {
            transform: scale(0.7);
            opacity: 0;
        }


        to {
            transform: scale(1);
            opacity: 1;
        }
    }


    .tag-remove {
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 0.9rem;
        line-height: 1;
        padding: 0;
        opacity: 0.85;
        transition: opacity 0.15s;
    }


    .tag-remove:hover {
        opacity: 1;
    }


    /* Grid of options */
    .options-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
    }


    .options-col {
        display: flex;
        flex-direction: column;
    }


    .option {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 11px 4px;
        cursor: pointer;
        border-radius: 8px;
        transition: background 0.12s;
        user-select: none;
    }


    .option:hover {
        background: rgba(0, 0, 0, 0.03);
    }


    /* Custom radio */
    .radio {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        border: 2px solid #ccc;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: border-color 0.15s, background 0.15s;
        position: relative;
    }


    .radio::after {
        content: '';
        width: 0.9rem;
        height: 0.9rem;
        border-radius: 50%;
        background: #FFD88C;
        transform: scale(0);
        transition: transform 0.18s cubic-bezier(0.34, 1.56, 0.64, 1);
    }


    .option.selected .radio {
        border-color: #FFD88C;
        background: #fff;
    }


    .option.selected .radio::after {
        transform: scale(1);
    }


    .option-name {
        flex: 1;
        color: #9D9B98;
        font-family: Lato;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }



    .option-price {
        color: #3B3731;
        text-align: right;
        font-family: Lato;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }


    /* Divider between columns */
    .options-col:first-child {
        padding-right: 32px;
    }


    .options-col:last-child {
        padding-left: 32px;
    }
</style>