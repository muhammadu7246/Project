using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace infr.Controllers
{
    public class UserController : Controller
    {
        // GET: User
        public ActionResult registration()
        {
            return View();
        }
        public ActionResult login()
        {
            return View();
        }
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        public ActionResult FAQS()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult insurance()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult life_insurance()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult Medical_insurance()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult moter_insurance()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult Home_insurance()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult portfolio()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult price()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }
        public ActionResult policy_Proposal()
        {
            return View();
        }
    }
}