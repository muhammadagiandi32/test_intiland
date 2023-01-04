<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid m-5">
        <form id="form" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($data as $row)
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h1>Purchase Request</h1>
                        <div class="col-6">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="date"
                                        value="{{ $row->Date_Time_Entry }}" id="inputPassword" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Req CC</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Cost_Center }}" name="reqcc"
                                        id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Requestor</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        value="{{ $row->Emp_Name }} ({{ $row->Emp_No}})" name="requestor" readonly
                                        id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Good Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Prq_Cat }}" name="goodtype"
                                        readonly id="inputPassword">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Prq Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Prq_Code }}" name="prqcode"
                                        readonly id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Employee</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Emp_No }}" name="employee"
                                        readonly id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Emp_Email }}" name="email"
                                        readonly id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Status Record</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Doc_Type }}"
                                        name="statusrecord" id="inputPassword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Descriptions</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $row->Prq_Desc }}" readonly
                                        name="descriptions" id="inputPassword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h1>Add New Item</h1>
                        <div class="col-6">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Item ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="itemid" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Item Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="itemname" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Specification</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="specification" id="inputPassword">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Quantitiy</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="quantitiy" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Delivery Date</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deliverydate" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Attachment</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="attachment" id="inputPassword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
        document.ready(function(){
            $('#form').on('click', function(e){
                e.preventdefault();
                var form_data = new FormData(this); 
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "{{ url('/') }}",
                    method: "POST",
                    async: true,
                    data:form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // $('#image').val('');
                        if(data.msg = 200){
                            alert('data berhasil di simpan');
                        }else{
                            alert('data gagal di simpan');
                        }
                    }
                })
            });
        });
    </script>
</body>

</html>