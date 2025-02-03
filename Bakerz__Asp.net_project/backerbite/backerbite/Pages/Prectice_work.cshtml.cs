using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace backerbite.Pages
{
    public class Prectice_workModel : PageModel
    {
        public void OnGet()
        {
            ViewBag.Message = "Message From View Bag";
            ViewBag.CurrentDate = DateTime.Now.ToLongDateString();
            string[] fruits = { "Apple", "Mango", "Banana", "Orange" };
            ViewBag.FruitsArray = fruits;
            ViewBag.SportsList = new List<string>()
            {
                "Cricket",
                "Football",
                "Hockey",
            };
        }
    }
}
