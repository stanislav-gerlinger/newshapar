<template>
    <div class="edit-list">
        <div class="edit-list__header">
            <div>Заголовок</div>
            <div>Title</div>
            <div>Title</div>
            <div>Редактирование</div>
        </div>
        <div class="edit-list__search">
            <div><input v-model="searchTitle" v-on:keyup="filterValues"></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="edit-list__item" v-for="product in products.slice(0, productsToShow * page)">
            <div>{{ product.title }}</div>
            <div>Item</div>
            <div>Item</div>
            <div>
                <a href="">Редактировать</a>
                <a v-on:click="deleteItem(product.id)">Удалить</a>
            </div>
        </div>
        <a v-on:click="showMoreProducts">Показать больше</a>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['initial_products'],
        mounted() {
            this.products = this.initial_products;
            console.log('Component mounted.')
        },
        data() {
            return {
                products: [],
                productsToShow: 10,
                page: 1,
                searchTitle: ''
            }
        },
        methods: {
            showMoreProducts: function() {
                this.page++;
            },
            deleteItem: function(id) {
                let products = this.products,
                url = 'products/delete/' + id;

                axios.delete(url, {params: {'id': id}})
                .then(function (response) {
                    for( let productID in products ) {
                        if (parseInt(products[productID].id) === parseInt(response.data.id)) {
                            products.splice(productID, 1);
                        }
                    }
                })
            },
            filterValues: function() {
                if (this.searchTitle == '') {
                    this.products = this.initial_products;
                } else{
                    let filterProducts = [];
                    for( let productID in this.products ) {
                        let str = this.products[productID].title.toLowerCase().indexOf(this.searchTitle.toLowerCase())
                        if ( str == 0 ) {
                            filterProducts.push(this.products[productID]);
                        }
                    }
                    if (filterProducts.length != 0) {
                        this.products = filterProducts;
                    }
                }

            }
        }

    }
</script>
