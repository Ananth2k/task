 $(function() {
  $('#createvalidate').validate({
    rules: {
       
      NAME: {
      required: true,
       minlength: 3,
        maxlength: 50
      },
      DOB: {
      required: true
      },
       ROLLNO: {
      required: true,
      number:true
      },
      ENGLISH: {
      required: true,
      number:true
      },
      MATHS: {
      required: true,
      number:true
      },
      SCIENCE: {
      required: true,
      number:true

      }
      


    },
    messages: {
      NAME: {
        required: "Please enter the student name",
        minlength: "Name must be at least 3 characters long",
          maxlength: "Your name must not exceed 50 characters"
      },
      DOB: {
        required: "Please choose the date"
      },
       ROLLNO: {
        required: "Please enter the roll number",
        number:"Please provide a number"
      },
      ENGLISH: {
        required: "Please enter the mark",
        number:"Please provide a number"
      },
      MATHS: {
        required: "Please enter the mark",
        number:"Please provide a number"
      },
      SCIENCE: {
        required: "Please enter the mark",
        number:"Please provide a number"

      }
      
    },

    errorElement: 'span',
    errorPlacement: function(error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function(element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});