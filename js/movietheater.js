
            var ul = document.getElementById("list");

            var listItems = ul.getElementsByTagName("li");

            for(li of  listItems){
                li.addEventListener('click', function(){
                    for(li of listItems){
                        $('.demo').collapse('show');
                        $('.lychinhthang').collapse('hide');
                        $('.thuduc').collapse('hide');
                        $('.cuchi').collapse('hide');
                        $('.landmark81').collapse('hide');
                        $('.tranquankhai').collapse('hide');
                        $('.suvanhanh').collapse('hide');
                        $('.dongkhoi').collapse('hide');
                        $('.nguyenxi').collapse('hide');
                        $('.binhtan').collapse('hide');
                        $('.hoanvanthu').collapse('hide');
                        $('.govap').collapse('hide');
                        $('.aeontanphu').collapse('hide');
                        $('.pandora').collapse('hide');
                        $('.truongson').collapse('hide');
                        $('.vincomdongkhoi').collapse('hide');
                        $('.citypoint').collapse('hide');
                        $('.pearlplaza').collapse('hide');
                        $('.vivocity').collapse('hide');
                        $('.vincomthuduc').collapse('hide');
                        $('.thaodien').collapse('hide');
                        $('.crescentmall').collapse('hide');
                        li.classList.remove("active");
                    }
                    if(!this.classList.contains('active')){
                        this.classList.add("active");
                    }
                })
            }
