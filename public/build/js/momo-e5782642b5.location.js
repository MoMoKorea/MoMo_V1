
/**
 * Created by gon on 2016. 12. 31..
 */
var location_vue = new Vue({
    el: '#location_div',
    data: {
        location_id: 0,
    },
    methods: {
        setLocationSelected: function (locationId) {
            this.location_id = locationId;
        },

        setLocationUpdate: function () {

            var formData = {
                locationId: this.location_id
            };

            $.ajax({
                url: "location",
                type: "POST",
                dataType: "json",
                data: formData,
                success: function(response) {

                    if (response.meta.status == 1) {
                        location.href = response.data.uri;
                    }

                }
            });
        }

    }
});
//# sourceMappingURL=momo.location.js.map
