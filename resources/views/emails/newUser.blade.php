<!DOCTYPE html>
<html>
<body>
	Bienvenido a la web {{ Auth::user()->email }}

	{{ url("/verificateemail/".$verified_key) }}

</body>
</html>
