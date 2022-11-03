<form action="/update/{{$id}}" method="post">
    @csrf
    Update Fish Data: <br/>
    Fish Weight: <input type="text" name="fishweight" /> <br/>
	Public post? <input type="checkbox" name="public" value="yes" /> <br/>
    <input type="submit" value="Update" />   
</form>


<table border="1px" width="100%">
			<tr>
				<td>Id</td>
				<td>Fish Name</td>
                <td>Fish Weight</td>
				<td>Uploaded Time</td>
				<td>Updated Time</td>
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
                    print "<td>" .$fData->public. "</td>";
                print "</tr>";
            }
			?>
</table>