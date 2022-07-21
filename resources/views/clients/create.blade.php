
    <div class="main-content">
    <div class="wrapper">
        <h1>Add Client</h1>
        <form action="{{ route('clients.store')}}" method="POST">
            @csrf
            <table class="tbl-30">
              <tr>
                <td> name: </td>
                <td>
                <input type="text" name="name" placeholder="">
<label class="text-danger">{{$errors->first("title")}}</label>
                </td>
                        </tr>
                        <tr>
                <td> address: </td>
                <td>
                <input type="text" name="adress" placeholder="">
                <label class="text-danger">{{$errors->first("adress")}}</label>
                </td>
                        </tr>
                        <tr>
                <td> phone: </td>
                <td>
                <input type="text" name="phone_number" placeholder="">
                <label class="text-danger">{{$errors->first("phone_number")}}</label>
                </td>
                        </tr>
                      


            

</table>
          

            <button type="submit">save</button>
        </form>

    </div>

    