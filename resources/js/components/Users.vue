<template>
    <div class="container">        
          <div class="box mt-5">
            <div class="box-header">
            <h3 class="box-title">User Table</h3>

            <div class="box-tools">
               
            </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Modify</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>cas@gmail.ru</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="" class="fa fa-edit blue"></a>
                      <a href="" class="fa fa-trash red"></a>
                  </td>
                </tr>
                
                
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
