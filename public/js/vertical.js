(function($){


        $('#WS-SL--content').WS_ScroLi({
            validEnd : {
                status  : false
            },
          
            sections : [
                [ '#managed_services', '<a href="#managed_services">Managed Services​</a>' ],
                [ '#managed_applications', '<a href="#managed_applications">Managed Applications</a>' ],
                [ '#managed_data_analytics', '<a href="#managed_data_analytics">Managed Data & Analytics</a>' ],
                [ '#managed_infraestructure', '<a href="#managed_infraestructure">Managed Infrastructure</a>' ]
            ],
            position : {
                x : ['left','auto'],
                y : ['top', 140]
            },
            icon : {
                size        : 15,
                borderWidth : 8,
                borderRadius: 100,
                color       : '#187bcd',
                colorPast   : '#187bcd',
                colorOff    : 'grey'
            },
            line : {
                height      : 110,
                width       : 3,
                color       : 'grey',
                colorPast   : '#187bcd',
                colorOff    : 'grey',
            },
        });


  })(jQuery);