if ($('#add-form').length > 0) {
    $('#add-form').validate({
        rules: {
            fullname: {
                required: true
            },
            mobileno: {
                required: true
                maxlength: 11,
            },
            emailid: {
                required: true,
                maxlength: 60,
                email: true
            },
            password: {
                required: true,
                
                
            },
            confirmpassword:{
                required:true,
            }
        },
        messages: {
            name: {
                required: 'ກະລຸນາໃສ່ຊື່.',

            },
            mobileno: {
                required: 'ກະລຸນາໃສ່ເບີໂທ.',
                maxlength: 'ເບີຕ້ອງບໍ່ກາຍ 11 ຕົວເລກ.'
            },
            email: {
                required: 'Email is required.',
                email: 'It does not seem to be a valid email.',
                maxlength: 'The email should be or equal to 60 chars.'
            },
            password: {
                required: 'ກະລຸນາໃສ່ລະຫັດ.'
            },
            confirmpassword:{
                required: 'ໃສ່ລະຫັດຢືນຢັນ'
            }
        
        }
    })
}