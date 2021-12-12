inputCep.addEventListener('focusout', function(event) {

    if(this.value.length >= 8)

        $.get(`https://ws.apicep.com/cep/${this.value}.json`, function(result) {

            inputLogradouro.value = result.address;
            inputBairro.value = result.district;
            inputCidade.value = result.city;
            inputUf.value = result.state;
        });
});
