var count = 0;

$(document).ready(function(){
    
    $.get('../dashboard/xhrGetSongs', function(o){

        var i = 0;
        for(i = 0; i < o.length; i++){
            var bg = '';
            if(i % 2 == 0){
                bg = 'even-row';
            }
            $('#fave-songs').append(
                '<div class="row-list ' + bg + '"> <strong>' + o[i].title + 
                ' </strong><div id="del-' + o[i].id + '" rel="' + o[i].id + '" class="del list-column-action delete">' + 
                'DELETE </div></div>'
            );
        }

        count = i - 1;

        $('.del').on('click', function(e){
            var id = $('#' + e.target.id).attr('rel');
            
                $.post('../dashboard/xhrDeleteSong', {'id' : id}, function(o){ 
                    location.reload() ;
                });
        });
    }, 'json');
    
    $('#songInsert').submit(function(e){
        //e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        console.log(data);

        var bg = '';
        if(count % 2 == 0){
            bg = 'even-row'; 
            count++;
        }
        
        $.post(url, data, function(o){ 

            
            $('#fave-songs').append(
                '<div class="row-list ' + bg + '"> <strong>' + o.title + 
                ' </strong><div id="del-' + o.id + '" rel="' + o.id + '" class="del list-column-action delete">' + 
                'DELETE </div></div>'
            );
         
            $('.del').on('click', function(e){
            var id = $('#' + e.target.id).attr('rel');
            
                $.post('../dashboard/xhrDeleteSong', {'id' : id}, function(o){ 
                    location.reload() ;
                });

                return false;
            });

        }, 'json');
        
        return false;
    });

    
});