<form action="{{ route('rate.store', $task) }}" method="POST">
@csrf
<div>
    <label for="rating">Rating (1-5)</label>
    <input type="number" name="rating" min="1" max="5" required>
</div>
<div>
    <label for="comment">Comment</label>
    <textarea name="comment" rows="3"></textarea>
</div>
<button type="submit">Submit Rating</button>
</form>
