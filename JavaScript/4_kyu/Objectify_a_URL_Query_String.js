// Converts a URL Query String into an object map
function convertQueryToMap(query) {
  if (query.trim() === "") return {};
  const objectMap = {};
  const singeletons = query.split("&");
  for (var i = 0; i < singeletons.length; i++) {
    const pathAndValue = singeletons[i].split("=");

    const pathSplited = pathAndValue[0].split(".");

    const value = pathAndValue[1];

    var placeInObjectMap = objectMap;

    for (var j = 0; j < pathSplited.length; j++) {
      if (j == pathSplited.length - 1) {
        placeInObjectMap[pathSplited[j]] = decodeURIComponent(value);
      } else if (pathSplited[j] in placeInObjectMap) {
        placeInObjectMap = placeInObjectMap[pathSplited[j]];
      } else {
        placeInObjectMap[pathSplited[j]] = {};
        placeInObjectMap = placeInObjectMap[pathSplited[j]];
      }
    }
  }
  return objectMap;
}

convertQueryToMap(`user.name.firstname=Bob&user.name.lastname=Smith&user.favoritecolor=Light%20Blue
  `);
/*
{
  'user': {
    'name': {
      'firstname': 'Bob',
      'lastname': 'Smith'
    },
    'favoritecolor': 'Light Blue'
  }
}
*/
