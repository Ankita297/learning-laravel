
# Models




## What is Model

### Each table has its own model 

 - Model are class based php files
 -  Laravel includes  Eloquent , an object relational mapper 

### cmd to make modal

- php artisan make:model <modelName>
- php artisan make:model <modelName> --migration


### Insert query in ORM 
-use App\Model 
- 
create the instance of that  object then start putting values 

### Select query in ORM 

-  $customers=Customer::all();
