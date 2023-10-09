// function GetChanses() {
//   axios
// .get("https://64fdcced596493f7af7e9ac2.mockapi.io/api/v1/Chanses")
// .then((response) => {
//   const api = response.data;
//   const apiTable = document.getElementById("cq");
//   api.forEach((result) => {
//     const row = document.createElement("div");

//     row.innerHTML = `
    // <div class="card h-100">
    //   <div class="card-body">
    //     <h5 class="card-title">${result.Name}</h5>
    //     <br>
    //     <p class="card-text">
    //       الساعات التطوعية : ${result.Hours}
    //     </p>
    //     <p>
    //       العدد المطلوب : ${result.Hours}
    //     </p>
    //   </div>
    //   <button id="outline_btn" type="button" class="btn btn-outline btn-lg" style="font-weight: 400; font-size: 21px;  padding: 3px; width: 60px; margin: auto; margin-bottom:10px ;">قدّم</button>
    //   <div class="card-footer">
        // <small class="text-muted">وقت الاضافة : ${result.Date}</small>
    //   </div>
    // </div>
//     `;
//     apiTable.appendChild(row);
//   });
// })
// .catch((error) => {
//   console.log("error", error);
// });
// }