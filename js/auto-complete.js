var placeSearch, autocomplete;
  var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
  };

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
    /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
    {types: ['geocode']});

  // restrict county
  autocomplete.setComponentRestrictions( {'country': ['us', 'fr', 'ca']});
  

  console.log('initAutocomplete called.')

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  /*for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }*/

  $('#address1').val('');
  console.log('fillInAddress change event called.')

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
console.log(val);
console.log(addressType);
      if (addressType == 'street_number' || addressType == 'route') {
          $('#address1').val( $('#address1').val() + val +" ").addClass('has-val').parent().addClass('form-ok');
      } else if (addressType == 'locality') {
          $('#city').val( val ).addClass('has-val').parent().addClass('form-ok');
      } 
      else if (addressType == 'country') {
            if(val==='United States'){
                    $('#id_country').val(21);
                    $('#country_residence').val(21);
            }
            else if (val==='Canada')
            {
                $('#id_country').val(4);
                $('#country_residence').val(4);

            }
            else if (val==='France')
            {
                $('#id_country').val(8);
                $('#country_residence').val(8);

            }
               updateState();
      }    
else if (addressType == 'locality') {
          $('#city').val( val ).addClass('has-val').parent().addClass('form-ok');
      }        
      else if (addressType == 'administrative_area_level_1') {
var state = place.address_components[i]['long_name'];
          $('#id_state option')
            .filter(function() { return $.trim( $(this).text() ) == place.address_components[i]['long_name']; })
            .attr('selected','selected');
      } else if (addressType == 'postal_code') {
          $('#postcode').val( val ).addClass('has-val').parent().addClass('form-ok');
      }

      // document.getElementById(addressType).value = val;
    }
  }
   $('#id_state option')
            .filter(function() { return $.trim( $(this).text() ) == state; })
            .attr('selected','selected');
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  console.log('geolocate on focus.')

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}