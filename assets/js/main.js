$("document").ready(function(){

        var myName = 'nannigan',
                        at = '@nannigans',
                        suffix = '.com';


                    var w = myName,
                        q = at,
                        z = suffix,
                        zz = 'mailto:'+ w + q + z;
                $('.sayHi').on('click',
                            function(w, q, z){
                                $(this).attr('href',zz);
                            });
});