
  $( "#form4" ).validate({
    rules: {
      brand: { required: true },
      fueltype: { required: true },
      
    },
    messages: {
        brand: {
            required: 'ກະລຸນາເລືອກຍີ່ຫໍ້.',

        },
        fueltype: {
            required: 'ກະລຸນາເລືອກປະເພດນ້ຳມັນ.',
          
        },
        
    
    }
});
