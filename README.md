http://localhost:8000/plugin-blog
```
{"message":"Hello from Blog plugin!"}
```

http://localhost:8000/test-filter
```
Original value. ✅ Modified by filter.
```

http://localhost:8000/test-event

check in logs . You should get something like
```
[2025-05-27 12:56:59] local.INFO: 📦 Blog plugin received app.booted event!  
```

