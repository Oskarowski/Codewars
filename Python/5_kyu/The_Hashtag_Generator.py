def generate_hashtag(s):
    if not s.strip():
        return False

    words = s.split()
    hashtagged = "#" + "".join(word.capitalize() for word in words)

    if len(hashtagged) > 140:
        return False

    return hashtagged
