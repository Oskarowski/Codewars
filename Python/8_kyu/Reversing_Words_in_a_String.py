def reverse(st):
    if st == '':
        return ''
    st = st.split()
    return (" ".join(st[::-1]))


(reverse('Hello World'))    # 'World Hello')
(reverse('Hi There.'))      # 'There. Hi')

# 'hqdaoqjkiweqquwouyrgfwjyotgkttgw wgwstlooojkwtpugqwijeooqteiglkutept foqiwuit q alylt')
(reverse('alylt  q foqiwuit wgwstlooojkwtpugqwijeooqteiglkutept hqdaoqjkiweqquwouyrgfwjyotgkttgw'))
