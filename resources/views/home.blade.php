<html>
    <head>
        <title>My first PHP Website</title>
        <link  rel="stylesheet" href="{{asset('/css/style.css')}}"> 
    </head>
	
    <body>
        <h2>Home Page</h2>
		
        
		<p>Hello</p> <!--Display's user name-->
		
        <a href="logout.php">Click here to go logout</a><br/><br/>
		
        <form action="/add" method="post">
           @csrf
           Add more to list: <br/>
           Fish Name: <input type="text" name="fishname" /> <br/>
           Fish Weight: <input type="text" name="fishweight" /> <br/>
		   Public post? <input type="checkbox" name="public" value="yes" /> <br/>
           <input type="submit" value="Add to list" />   
        </form>
		
		<h2 id="printvalue"></h2>
		<h2 align="center">My list</h2>
		<table border="1px" width="100%">
			<tr>
				<td>Id</td>
				<td>Fish Name</td>
                <td>Fish Weight</td>
				<td>Uploaded Time</td>
				<td>Updated Time</td>
				<td>Edit</td>
				<td>Delete</td>
				<td>Public Post</td>
			</tr>
			
			<?php 
           // echo $fishData;
			 foreach ($fishData as $fData) {

                print "<tr>";
                    print "<td>" .$fData->id. "</td>";
                    print "<td>" .$fData->name. "</td>";
                    print "<td>" .$fData->weight. "</td>";
                    print "<td>" .$fData->uploadedtime. "</td>";
                    print "<td>" .$fData->updatedtime. "</td>";
                    print '<td><a href="/edit?id='.$fData->id.'">edit</a> </td>';
                    print '<td><a href="#" onclick="myFunction('.$fData->id.')">delete</a> </td>';
                    print "<td>" .$fData->public. "</td>";
                print "</tr>";
            }
			?>
        <!-- <img src="{{asset('/images/abc.jpg')}}" /> -->
		</table>
        <script src="{{asset('/js/script.js')}}"></script> 
		
		<!-- <script>
		
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

                    //let url = "{{ route('delete', 'id=:id') }}";
                    //url = url.replace(':id', id);
                    //window.location.assign(url);

                    window.location.assign("delete?id=" + id);

                    alert(url);
			   }
			} 
			
		</script> -->
	</body>
</html>