//thanh phan nut
@component('mail::button', ['url' => $url, 'color' => 'success'])
View Order
@endcomponent

//Thành phần bảng
@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent 

//Thanh phan dieu khien
@component('mail::panel')
This is the panel content.
@endcomponent

