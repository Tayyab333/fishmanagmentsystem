function myFunction(id)
			{
			   var r = confirm("Are you sure you want to delete this record?");
               alert(id);
			   if(r == true)
			   {
                    alert("run");
                    //let url = "{{ route('delete', 'id=:id') }}";
                    //url = url.replace(':id', id);
                    //document.location.href=url;

                    window.location.assign("delete?id=" + id);
                    
                    alert(url);
			   }
			}