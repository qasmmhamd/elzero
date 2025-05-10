fetch('api.php')
  .then(response => response.json())
  .then(data => {
    const list = document.getElementById('userList');
    list.innerHTML = ''; // ننظف القائمة

    data.forEach(user => {
      const li = document.createElement('li');
      li.innerHTML = `
        الاسم: <input type="text" value="${user.name}" id="name-${user.id}">
        البريد: ${user.email}
        <button onclick="updateUser(${user.id})">تحديث</button>
      `;
      list.appendChild(li);
    });
  });

function updateUser(id) {
  const name = document.getElementById(`name-${id}`).value;

  fetch('update.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ id: id, name: name })
  })
  .then(response => response.json())
  .then(data => {
    alert(data.message);
  });
}
